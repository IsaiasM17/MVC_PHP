<?php 


const SERVER="localhost";
const DB="prestamos";
const USER="root";
const PASSWORD="";

const CONEXION= "mysql:host=" . SERVER. "; dbname=" . DB;

const METHOD="AES-256-CBC";

//tiene que ir con comillas simples la llave secreta
const SECRET_KEY='$PRESTAMOS@2023';
const SECRET_IV= '22092023';