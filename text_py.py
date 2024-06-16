from pydub import AudioSegment
from pydub.playback import play
import os
import mysql.connector

# Configuración de conexión a la base de datos MySQL
db_config = {
    'host': 'localhost',
    'user': 'tu_usuario',
    'password': 'tu_contraseña',
    'database': 'nombre_de_tu_base_de_datos'
}

# Conexión a la base de datos
conn = mysql.connector.connect(**db_config)
cursor = conn.cursor()

# Función para generar huellas digitales y almacenarlas en la base de datos
def generate_fingerprints(directory):
    for filename in os.listdir(directory):
        if filename.endswith(".mp3"):
            song_path = os.path.join(directory, filename)
            song_id = insert_song_into_db(filename)  # Insertar la canción en la base de datos y obtener su ID
            fingerprints = get_fingerprints(song_path)  # Obtener huellas digitales del archivo de audio
            save_fingerprints_to_db(song_id, fingerprints)  # Almacenar las huellas digitales en la base de datos

# Función para insertar una canción en la base de datos y obtener su ID
def insert_song_into_db(filename):
    insert_query = "INSERT INTO song (filename) VALUES (%s)"
    cursor.execute(insert_query, (filename,))
    conn.commit()
    return cursor.lastrowid

# Función para obtener huellas digitales de un archivo de audio
def get_fingerprints(song_path):
    audio = AudioSegment.from_file(song_path)
    return audio.fingerprint()

# Función para almacenar huellas digitales en la base de datos
def save_fingerprints_to_db(song_id, fingerprints):
    insert_query = "INSERT INTO huella_digital (cancion_idCancion, fingerprint) VALUES (%s, %s)"
    for fingerprint in fingerprints:
        cursor.execute(insert_query, (song_id, fingerprint))
    conn.commit()

# Directorio donde se encuentran los archivos MP3
mp3_directory = '/ruta/a/tu/directorio/de/mp3'
generate_fingerprints(mp3_directory)

# Cerrar conexión a la base de datos
cursor.close()
conn.close()
