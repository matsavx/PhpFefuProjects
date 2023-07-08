<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $character_name;

    #[ORM\OneToMany(mappedBy: 'character', targetEntity: CharacterAttributeValue::class)]
    private $characterAttributeValues;

    public function __construct()
    {
        $this->characterAttributeValues = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharacterName(): ?string
    {
        return $this->character_name;
    }

    public function setCharacterName(?string $character_name): self
    {
        $this->character_name = $character_name;

        return $this;
    }

    /**
     * @return Collection<int, CharacterAttributeValue>
     */
    public function getCharacterAttributeValues(): Collection
    {
        return $this->characterAttributeValues;
    }

    public function addCharacterAttributeValue(CharacterAttributeValue $characterAttributeValue): self
    {
        if (!$this->characterAttributeValues->contains($characterAttributeValue)) {
            $this->characterAttributeValues[] = $characterAttributeValue;
            $characterAttributeValue->setCharacter($this);
        }

        return $this;
    }

    public function removeCharacterAttributeValue(CharacterAttributeValue $characterAttributeValue): self
    {
        if ($this->characterAttributeValues->removeElement($characterAttributeValue)) {
            // set the owning side to null (unless already changed)
            if ($characterAttributeValue->getCharacter() === $this) {
                $characterAttributeValue->setCharacter(null);
            }
        }

        return $this;
    }
}
