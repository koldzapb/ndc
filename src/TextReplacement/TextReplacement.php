<?php

namespace App\TextReplacement;



use App\Entity\Casino;
use App\Entity\Filters;

class TextReplacement
{





    public function reviewReplacement(Casino $casinoForReview, $casinos,$filters, $reviewText)
    {


        foreach ($casinos as $row) {


            if (!$row instanceof Casino) continue;

            if ($row->getCasinoname() != "" && strpos(strtolower($row->getCasinoname()), 'closed') === false) {


                if (!preg_match('~\b(' . strtolower($row->getCasinoname()) . ')\b~', strtolower($casinoForReview->getCasinoname()))) {
                    $casino_name = $row->getCasinoname();

                    //$casino_name = str_replace(' Casino', "", $casino_name);

                    //$casino_name = str_replace(' casino', "", $casino_name);
                    $casino_name = trim($casino_name);


                    if (strlen($casino_name) >= 2) {
                        ;
                        if ($casino_name == 'Play') {
                            $casino_name = 'Play Casino';
                        }

                        if ($casino_name == 'Exclusive') {
                            $casino_name = 'Exclusive Casino';
                        }
                        if ($casino_name == 'Luxury') {
                            $casino_name = 'Luxury Casino';
                        }
                        if ($casino_name == 'Unique') {
                            $casino_name = 'Unique Casino';
                        }



                        $search = str_replace("/","-",$casino_name . "(.?online)?(.?Casino)?('s)?") ;
                        $search = "/\b(" . $search . ")\b(?!([^<]*<\/a>|[^<]*<\/h[1-6]>|[^<]*>|[^\[]*\]))/i";

                        $replacement = "<a title='" . $row->getCasinoname() . "' href='/casino-review/" . $row->getId() . "/" . $row->getSlug() . "'>" . $casino_name . "</a>";
                        $reviewText = preg_replace("$search", $replacement, $reviewText,1);


                    }

                }

            }


        }

            foreach ($filters as $filter)
            {
                if(!$filter instanceof Filters) continue;
                $search = "/\b(" . $filter->getSearch() . ")\b(?!([^<]*<\/a>|[^<]*<\/h[1-6]>|[^<]*>|[^\[]*\]))/i";

                $reviewText=preg_replace("$search", $filter->getReplace(), $reviewText,1);
            }


        return $reviewText;


    }




    public function otherPagesReplacement($casinos,$filters, $reviewText,$currentUri)
    {


        foreach ($casinos as $row) {


            if (!$row instanceof Casino) continue;

            if ($row->getCasinoname() != "" && strpos(strtolower($row->getCasinoname()), 'closed') === false) {



                    $casino_name = $row->getCasinoname();

                   // $casino_name = str_replace(' Casino', "", $casino_name);

                   // $casino_name = str_replace(' casino', "", $casino_name);
                    $casino_name = trim($casino_name);

                    if (strlen($casino_name) >= 2) {
                        ;
                        if ($casino_name == 'Play') {
                            $casino_name = 'Play Casino';
                        }

                        if ($casino_name == 'Exclusive') {
                            $casino_name = 'Exclusive Casino';
                        }
                        if ($casino_name == 'Luxury') {
                            $casino_name = 'Luxury Casino';
                        }
                        if ($casino_name == 'Unique') {
                            $casino_name = 'Unique Casino';
                        }




                        $search = str_replace("/","-",$casino_name . "(.?online)?(.?Casino)?('s)?") ;
                        $search = "/\b(" . $search . ")\b(?!([^<]*<\/a>|[^<]*<\/h[1-6]>|[^<]*>|[^\[]*\]))/i";

                        $replacement = "<a title='" . $row->getCasinoname() . "' href='/casino-review/" . $row->getId() . "/" . $row->getSlug() . "'>" . $casino_name . "</a>";
                        $reviewText = preg_replace("$search", $replacement, $reviewText,1);


                    }



            }


        }

        foreach ($filters as $filter)
        {
            
            if(!$filter instanceof Filters || strpos($filter->getReplace(),$currentUri)!==false ) continue;
            $search = "/\b(" . $filter->getSearch() . ")\b(?!([^<]*<\/a>|[^<]*<\/h[1-6]>|[^<]*>|[^\[]*\]))/i";
            $reviewText=preg_replace("$search", $filter->getReplace(), $reviewText,1);
        }


        return $reviewText;


    }















}