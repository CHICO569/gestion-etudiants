<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Afficher la liste des étudiants
     */
    public function index()
    {
        return 'Liste des étudiants';
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return 'Formulaire d\'ajout d\'un étudiant';
    }

    /**
     * Enregistrer un nouvel étudiant
     */
    public function store(Request $request)
    {
        return 'Étudiant enregistré avec succès';
    }

    /**
     * Afficher les informations d'un étudiant
     */
    public function show($id)
    {
        return 'Informations de l\'étudiant numéro ' . $id;
    }

    /**
     * Afficher le formulaire de modification
     */
    public function edit($id)
    {
        return 'Formulaire de modification de l\'étudiant numéro ' . $id;
    }

    /**
     * Modifier un étudiant
     */
    public function update(Request $request, $id)
    {
        return 'Étudiant numéro ' . $id . ' modifié avec succès';
    }

    /**
     * Supprimer un étudiant
     */
    public function destroy($id)
    {
        return 'Étudiant numéro ' . $id . ' supprimé avec succès';
    }
}
