<?php 

namespace QH\Sellandsign\DTO;

class Contractor
{

    private $id;

    private $name;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Contractor
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }


}