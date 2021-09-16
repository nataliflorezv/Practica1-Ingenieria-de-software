# Práctica 1 - Ingeniería de sotfware

En este proyecto se realiza un sistema de información para laboratorio clínico, en pocas palabras consta de un sotfware donde se puede consultar y almacenar información de pacientes que se realizaron un examen para consultar su perfil lipídico.

Este sotfware tiene dos frentes uno de consulta de pacientes, que es exclusivamente para los pacientes y otra enfocado al bacteriólogo que será descrito posteriormente.

# Frente para pacientes

En este enfoque del sotfware los pacientes tienen la posibilidad de consultar los resultados de los examenes enfocados al perfil lipídico. Esto se podrá consultar por medio del documento de identidad de cada paciente, si el usuario no está registrado en la base de datos saldrá un mensaje de aviso notificandole que no se encontró ningun resultado. Caso contrario cuando el acceso con el documento de identidad es satisfactorio, este le mostrará toda la información de dicho paciente, además de los resultados del perfil lipídico. 

# Bacteriólogo

En esta sección del sotfware el bacteriólogo tiene que realizar su respectivo proceso de logueo utilizando un correo y una contraseña, en caso tal de que no cuente con un email con el que pueda iniciar sesión podrá realizar el respectivo registro, suministrando su nombre, email y su contraseña con su respectiva confirmación. 

Posterior a esto, el bacteriólogo tendra el acceso a 4 opciones: 

- Ingreso de pacientes
- Consulta de pacientes 
- Ingreso de control de calidad
- Consulta de control de calidad 

## Ingreso de pacientes

El bacteriólogo podrá realizar el registro de nuevos pacientes donde se pueda ingresar toda la información referente a este, tales como el nombre, email, documento de identidad, sexo, edad, EPS y el perfil lipídico.

## Consulta de pacientes

En esta parte el bacteriólogo podrá consultar cualquier paciente que esté registrado en la base de datos, donde podrá ver el codigo unico que identifica a cada paciente, documento de identidad, nombres, apellidos y tendrá opción de poder revisar los resultados asociados a cada paciente con la ayuda de un link o enlace. Además tendrá la posibilidad de modificar los parametros existentes de cada paciente.

## Ingreso de control de calidad

Acá el bacteriólogo puede realizar el ingreso de controles de calidad, para los diferentes tipos del perfil lipídico ya sea de trigliceridos, Colesterol total, HDL y LDL.

## Consulta de control de calidad

Por último, el bacteriologo tendrá la posibilidad de realizar consultas de todos los controles de calidad ingresados, donde los valores que no estén dentro del rango establecido se verán reflejados en la tabla de color rojo. Además de esto, tambien se mostrará todas las estadisticas de los controles de calidad para cada perfil lipídico.



El software contará con un botón de salir que permitirá que el bacteriólogo pueda cerrar sesión y lo redigirá a la pantalla de inicio.



