@extends('layouts.index')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center" >
        <div class="md:w-8/2 p-5">
            <img src="{{asset('img/registro.jpg')}}" alt="Imagen registro de usuario">
        </div>
        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Ingrese su nombre" class="border p-3  w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" type="text" placeholder="Ingrese su nombre de usuario" class="border p-3  w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="email" placeholder="Ingrese su email" class="border p-3  w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input id="password" name="password" type="password" placeholder="Ingrese su contraseña" class="border p-3  w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repita su contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repita su contraseña" class="border p-3  w-full rounded-lg">
                </div>
                <input type="submit" value="Crear" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection