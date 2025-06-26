<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Sesion extends BaseController
{
    public function index()
    {
        return view('front/sesion');
    }

    public function login()
    {
        $usuarioModel = new UsuarioModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $usuario = $usuarioModel->where('email', $email)->first();
        if ($usuario) {
            // Solo para depuración, elimina después
            log_message('error', 'POST: ' . $password . ' | DB: ' . $usuario['password']);
        }
        if ($usuario && password_verify($password, $usuario['password'])) {
            // Login exitoso, puedes guardar datos en sesión
            session()->set(['usuario_id' => $usuario['id'], 'usuario_nombre' => $usuario['nombre']]);
            return redirect()->to('/principal');
        } else {
            return redirect()->back()->with('error', 'Credenciales incorrectas');
        }
    }

    public function registro()
    {
        $usuarioModel = new UsuarioModel();
        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // Verifica si el email ya existe
        if ($usuarioModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'El email ya está registrado');
        }
        $usuarioModel->insert([
            'nombre' => $nombre,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
        return redirect()->to('/sesion')->with('success', 'Registro exitoso, ahora puedes iniciar sesión');
    }
}
