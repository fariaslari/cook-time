<?php
// src/Entity/Recipe.php
namespace App\Entity;

class Recipe
{
    protected $recipe;

    public function getRecipe()
    {
        return $this->recipe;
    }

    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
    }

}