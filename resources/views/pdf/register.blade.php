<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
      body{
        font-family: Arial, Helvetica, sans-serif;
      }
      br{
        display: block;
        margin-bottom: 0em;
      }
      hr{
        height: 2px;
        background-color: rgb(187, 107, 3);
        border: none;
      }
      .main-content{
        margin-left: 0.35in;
        margin-right: 0.35in;
      }
      .header{
        text-align: end;
        font-size: 15pt;
      }
      h3{
        font-size: 15pt;
      }
      .sender{
        position: absolute;
        left: 1in;
        text-decoration: none;
      }
      .sender p{
        font-size: 14pt;
      }
      .content{
        text-align: justify;
        font-size: 16pt;
        white-space: pre-line;
      }
      .footer{
        position: absolute;
        top: 12.45in;
        width: 100%;
        text-align: center;
        font-size: 13pt;
      }
    </style>
    <title>Oficio</title>
</head>
<body>
    <img style="height:0.9in;" src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/logo-pdf.png')))}}" />
    
    <div class="main-content">
      <span class="header">
        <i><h4>Dirección General de Educación Básica <br>
          Dirección de Educación Primaria
        <br></h4></i>

        <h4>La Paz, Baja California Sur, {{$register->date}} <br>
          Oficio: {{$register->folio}} <br>
          Asunto: {{$register->attention_type}} 
        <br></h4>
      </span>
  
      <h3>{{$register->recipient_name}} <br>
        {{$register->recipient_job}}. <br>
        <br>
        PRESENTE.-
        <br></h3>

      <span class="content">
        <p>{{$register->observations}}</p>
      </span>
  
      <br>
      <br>
      
      <span class="sender">
        <p><strong>ATENTAMENTE</strong><br>
          {{$register->sender_name}} <br>
          {{$register->sender_job}}.</p>
        
        <br>
      
        <p>C.c.p.-. {{$register->ccp}}.-</p>
      </span>
    </div>
    
    <span class="footer">
      <hr>
      <p>Blvd. Luis Donaldo Colosio y Valentín Gómez Farías, Col. Arboledas, CP 23070, La Paz, B.C.S., <br>
      Teléfonos: (612) 12 3 81 28, 12 3 80 31, conmutador: (612) 12 3 80 00 <br>
      Correo electrónico primarias@sepbcs.gob.mx</p>
    </span>
</body>
</html>


