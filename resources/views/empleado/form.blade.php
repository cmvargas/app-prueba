<label for="Nombre">Nombre </label>
<input type="text" name="Nombre" value="{{ $empleado->Nombre }}">
<br>
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" name="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">
<br>
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" name="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}">
<br>
<label for="correo"> Correo </label>
<input type="email" name="correo" value="{{ $empleado->Correo }}">
<br>
<label for="Foto"> Foto </label>
v{{ $empleado->Foto }}
<input type="file" name="Foto" >
<br>
<input type="submit" value="Guardar datos">