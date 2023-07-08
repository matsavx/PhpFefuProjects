<?php

namespace App\Entity;

use App\Repository\AttributeValueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttributeValueRepository::class)]
class AttributeValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Attribute::class, inversedBy: 'attributeValues')]
    private $attribute;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $value;

    #[ORM\OneToMany(mappedBy: 'attribute_value', targetEntity: CharacterAttributeValue::class)]
    private $characterAttributeValues;

    public function __construct()
    {
        $this->characterAttributeValues = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttribute(): ?Attribute
    {
        return $this->attribute;
    }

    public function setAttribute(?Attribute $attribute): self
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

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
            $characterAttributeValue->setAttributeValue($this);
        }

        return $this;
    }

    public function removeCharacterAttributeValue(CharacterAttributeValue $characterAttributeValue): self
    {
        if ($this->characterAttributeValues->removeElement($characterAttributeValue)) {
            // set the owning side to null (unless already changed)
            if ($characterAttributeValue->getAttributeValue() === $this) {
                $characterAttributeValue->setAttributeValue(null);
            }
        }

        return $this;
    }
}
