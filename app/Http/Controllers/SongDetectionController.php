<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SongDetectionController extends Controller
{
    public function detectSong(Request $request)
    {
        $request->validate([
            'audioFile' => 'required|mimes:audio/mpeg,mpga,mp3,wav'
        ]);

        $audioFile = $request->file('audioFile');
        $filePath = $audioFile->storeAs('uploads', $audioFile->getClientOriginalName());

        // Replace with the path to your Dejavu fingerprint directory
        $dejavuPath = '/path/to/dejavu/';

        $process = new Process(['python3', $dejavuPath . 'dejavu.py', '--recognize', 'file', storage_path('app/' . $filePath)]);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output = json_decode($process->getOutput(), true);

        // Assuming the output contains 'song_name' and 'artist' keys
        $songName = $output['song_name'] ?? 'Unknown';
        $artist = $output['artist'] ?? 'Unknown';

        return view('show', compact('songName', 'artist'));
    }
}
