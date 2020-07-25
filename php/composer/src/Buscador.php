<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{

    private $httpCLient;
    private $crawler;

    public function __construct(ClientInterface $httpCLient, Crawler $crawler)
    {
        $this->httpCLient = $httpCLient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        $response = $this->httpCLient->request('GET', $url);

        $html = $response->getBody();
        $this->crawler->addHtmlContent($html);

        $elementoscursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];

        foreach ($elementoscursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}
