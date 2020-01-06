<?php


namespace App\DTO;

use App\DTO\Factory\DtoFactory;
use Pagerfanta\Pagerfanta;

class Representation
{
    /** @var int */
    private $limit;

    /** @var int */
    private $currentItems;

    /** @var int */
    private $totalItems;

    /** @var int */
    private $offset;

    /** @var array  */
    private $data = [];

    public function __construct(Pagerfanta $pagerfanta)
    {
        $this->limit = $pagerfanta->getMaxPerPage();
        $this->currentItems = count($pagerfanta->getCurrentPageResults());
        $this->totalItems = $pagerfanta->getNbResults();
        $this->offset = $pagerfanta->getCurrentPageOffsetStart();

        foreach ($pagerfanta->getCurrentPageResults() as $item) {
            $this->data[] = DtoFactory::createNotification($item);
        }
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getCurrentItems(): int
    {
        return $this->currentItems;
    }

    public function setCurrentItems(int $currentItems): void
    {
        $this->currentItems = $currentItems;
    }

    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    public function setTotalItems(int $totalItems): void
    {
        $this->totalItems = $totalItems;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}