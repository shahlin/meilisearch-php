<?php

declare(strict_types=1);

namespace MeiliSearch\Endpoints\Delegates;

trait HandlesSettings
{
    // Settings - Ranking rules

    public function getRankingRules(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/ranking-rules');
    }

    public function updateRankingRules(array $rankingRules): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/ranking-rules', $rankingRules);
    }

    public function resetRankingRules(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/ranking-rules');
    }

    // Settings - Distinct attribute

    public function getDistinctAttribute()
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/distinct-attribute');
    }

    public function updateDistinctAttribute(string $distinctAttribute): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/distinct-attribute', $distinctAttribute);
    }

    public function resetDistinctAttribute(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/distinct-attribute');
    }

    // Settings - Searchable attributes

    public function getSearchableAttributes(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/searchable-attributes');
    }

    public function updateSearchableAttributes(array $searchableAttributes): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/searchable-attributes', $searchableAttributes);
    }

    public function resetSearchableAttributes(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/searchable-attributes');
    }

    // Settings - Displayed attributes

    public function getDisplayedAttributes(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/displayed-attributes');
    }

    public function updateDisplayedAttributes(array $displayedAttributes): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/displayed-attributes', $displayedAttributes);
    }

    public function resetDisplayedAttributes(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/displayed-attributes');
    }

    // Settings - Stop-words

    public function getStopWords(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/stop-words');
    }

    public function updateStopWords(array $stopWords): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/stop-words', $stopWords);
    }

    public function resetStopWords(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/stop-words');
    }

    // Settings - Synonyms

    public function getSynonyms(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/synonyms');
    }

    public function updateSynonyms(array $synonyms): array
    {
        // Patch related to https://github.com/meilisearch/meilisearch-php/issues/204.
        // Should be removed when implementing https://github.com/meilisearch/meilisearch-php/issues/209
        if (0 === \count($synonyms)) {
            $synonyms = null;
        }

        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/synonyms', $synonyms);
    }

    public function resetSynonyms(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/synonyms');
    }

    // Settings - Filterable Attributes

    public function getFilterableAttributes(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/filterable-attributes');
    }

    public function updateFilterableAttributes(array $filterableAttributes): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/filterable-attributes', $filterableAttributes);
    }

    public function resetFilterableAttributes(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/filterable-attributes');
    }

    // Settings - Sortable Attributes

    public function getSortableAttributes(): array
    {
        return $this->http->get(self::PATH.'/'.$this->uid.'/settings/sortable-attributes');
    }

    public function updateSortableAttributes(array $sortableAttributes): array
    {
        return $this->http->post(self::PATH.'/'.$this->uid.'/settings/sortable-attributes', $sortableAttributes);
    }

    public function resetSortableAttributes(): array
    {
        return $this->http->delete(self::PATH.'/'.$this->uid.'/settings/sortable-attributes');
    }
}
