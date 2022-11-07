<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoRepository::class)
 */
class Video
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=AcModule::class, inversedBy="videos")
     */
    private $id_module;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $no;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Pieces::class, mappedBy="id_video")
     */
    private $pieces;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $piece;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_etablissement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_formation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_promotion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_semestre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_modulee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_element;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;



    public function __construct()
    {
        $this->pieces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdModule(): ?AcModule
    {
        return $this->id_module;
    }

    public function setIdModule(?AcModule $id_module): self
    {
        $this->id_module = $id_module;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(?string $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Pieces[]
     */
    public function getPieces(): Collection
    {
        return $this->pieces;
    }

    public function addPiece(Pieces $piece): self
    {
        if (!$this->pieces->contains($piece)) {
            $this->pieces[] = $piece;
            $piece->setIdVideo($this);
        }

        return $this;
    }

    public function removePiece(Pieces $piece): self
    {
        if ($this->pieces->contains($piece)) {
            $this->pieces->removeElement($piece);
            // set the owning side to null (unless already changed)
            if ($piece->getIdVideo() === $this) {
                $piece->setIdVideo(null);
            }
        }

        return $this;
    }

    public function getPiece(): ?string
    {
        return $this->piece;
    }

    public function setPiece(?string $piece): self
    {
        $this->piece = $piece;

        return $this;
    }

    public function getIdEtablissement(): ?int
    {
        return $this->id_etablissement;
    }

    public function setIdEtablissement(?int $id_etablissement): self
    {
        $this->id_etablissement = $id_etablissement;

        return $this;
    }

    public function getIdFormation(): ?int
    {
        return $this->id_formation;
    }

    public function setIdFormation(?int $id_formation): self
    {
        $this->id_formation = $id_formation;

        return $this;
    }

    public function getIdPromotion(): ?int
    {
        return $this->id_promotion;
    }

    public function setIdPromotion(?int $id_promotion): self
    {
        $this->id_promotion = $id_promotion;

        return $this;
    }

    public function getIdSemestre(): ?int
    {
        return $this->id_semestre;
    }

    public function setIdSemestre(?int $id_semestre): self
    {
        $this->id_semestre = $id_semestre;

        return $this;
    }

    public function getIdModulee(): ?int
    {
        return $this->id_modulee;
    }

    public function setIdModulee(?int $id_modulee): self
    {
        $this->id_modulee = $id_modulee;

        return $this;
    }

    public function getIdElement(): ?int
    {
        return $this->id_element;
    }

    public function setIdElement(?int $id_element): self
    {
        $this->id_element = $id_element;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
    
    
}
