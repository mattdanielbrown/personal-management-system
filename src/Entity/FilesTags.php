<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilesTagsRepository")
 */
class FilesTags
{
    #TODO: decide later which column can be removed - currently there will be data redundancy
    # most likely having just one column "full_file_path" will be ok + tags + id + deleted (or do I even want deleted?)

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleted = 0;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $moduleName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $directoryPath;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fullFilePath;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tags;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(string $moduleName): self
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    public function getDirectoryPath(): ?string
    {
        return $this->directoryPath;
    }

    public function setDirectoryPath(string $directoryPath): self
    {
        $this->directoryPath = $directoryPath;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFullFilePath(): ?string
    {
        return $this->fullFilePath;
    }

    public function setFullFilePath(string $fullFilePath): self
    {
        $this->fullFilePath = $fullFilePath;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}