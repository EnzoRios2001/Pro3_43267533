<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\HTTP\RedirectResponse;

class UsuarioCrud extends BaseController
{
    private function checkAuth(): ?RedirectResponse
    {
        if (!session()->has('id_usuario')) {
            return redirect()->to('sesion')->with('error', 'Debes iniciar sesión para acceder.');
        }
        return null;
    }

    public function index()
    {
        if ($redirect = $this->checkAuth()) return $redirect;
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll();
        return view('front/usuarios_list', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        if ($redirect = $this->checkAuth()) return $redirect;
        return view('front/usuario_create');
    }

    public function store()
    {
        if ($redirect = $this->checkAuth()) return $redirect;
        $usuarioModel = new UsuarioModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $usuarioModel->insert($data);
        return redirect()->to('usuariocrud')->with('success', 'Usuario creado correctamente');
    }

    public function edit($id)
    {
        if ($redirect = $this->checkAuth()) return $redirect;
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id);
        if (!$usuario) {
            return redirect()->to('usuariocrud')->with('error', 'Usuario no encontrado');
        }
        return view('front/usuario_edit', ['usuario' => $usuario]);
    }

    public function update($id)
    {
        if ($redirect = $this->checkAuth()) return $redirect;
        $usuarioModel = new UsuarioModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email')
        ];
        $password = $this->request->getPost('password');
        if ($password) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        $usuarioModel->update($id, $data);
        return redirect()->to('usuariocrud')->with('success', 'Usuario actualizado correctamente');
    }

    public function delete($id)
    {
        if ($redirect = $this->checkAuth()) return $redirect;
        $usuarioModel = new UsuarioModel();
        $usuarioModel->delete($id);
        return redirect()->to('usuariocrud')->with('success', 'Usuario eliminado correctamente');
    }
}
