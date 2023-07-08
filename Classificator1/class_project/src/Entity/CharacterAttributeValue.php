<?php

namespace App\Entity;

use App\Repository\CharacterAttributeValueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterAttributeValueRepository::class)]
class CharacterAttributeValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Character::class, inversedBy: 'characterAttributeValues')]
    private $character;

    #[ORM\ManyToOne(targetEntity: AttributeValue::class, inversedBy: 'characterAttributeValues')]
    private $attribute_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharacter(): ?Character
    {
        return $this->character;
    }

    public function setCharacter(?Character $character): self
    {
        $this->character = $character;

        return $this;
    }

    public function getAttributeValue(): ?AttributeValue
    {
        return $this->attribute_value;
    }

    public function setAttributeValue(?AttributeValue $attribute_value): self
    {
        $this->attribute_value = $attribute_value;

        return $this;
    }
}
