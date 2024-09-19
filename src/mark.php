<?php


class TeethMarker
{
    protected string $htmlStr;
    protected string $bgColor = "#1F51FF";

    private mixed $qp;

    /**
     * @param $htmlStr
     */
    public function __construct($htmlStr)
    {
        $this->htmlStr = $htmlStr;
        $this->qp = html5qp($htmlStr);

    }
    public function markTeeth(array $teeth = []): void
    {
        foreach ($teeth as $tooth) {
            $this->markTooth($tooth);
        }
    }

    public function markTooth($label): void
    {
        $tooth = $this->qp->find("div.tooth-chart polygon#Tooth$label");
        if ($tooth->length > 0){
            $tooth->attr('fill', $this->bgColor);
        }
    }

    public function getHtml(): mixed
    {
        return $this->qp->top()->xml();
    }

}
