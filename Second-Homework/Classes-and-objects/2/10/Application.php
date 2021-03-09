<?php

require_once 'Video.php';
require_once 'VideoStore.php';

class Application
{

    private VideoStore $store;

    function __construct(VideoStore $store)
    {
        $this->store = $store;
    }

    function run(VideoStore $video)
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies($video);
                    break;
                case 2:
                    $this->rent_video($video);
                    break;
                case 3:
                    $this->return_video($video);
                    break;
                case 4:
                    $this->list_inventory($video);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies(VideoStore $videos): void
    {
        $video = readline('Enter title: ');
        $videos->addVideo(new Video($video));
    }

    private function rent_video(VideoStore $videos)
    {
        $video = readline('Enter title to rent: ');
        $videos->checkOutVideo($video);
    }

    private function return_video(VideoStore $videos)
    {
        $video = readline('Enter title to return: ');
        $videos->returnVideo($video);
    }

    private function list_inventory(VideoStore $videos)
    {
        $videos->printInventory();
    }
}

$store = new VideoStore();
$matrix = new Video("The Matrix");
$godFather = new Video("Godfather II");
$starWars = new Video("Star Wars Episode IV: A New Hope");

$store->addVideo($matrix);
$store->addVideo($godFather);
$store->addVideo($starWars);

$store->rateVideo("The Matrix", 5);
$store->rateVideo("The Matrix", 4);
$store->rateVideo("The Matrix", 5);
$store->rateVideo("Godfather II", 3);
$store->rateVideo("Godfather II", 4);
$store->rateVideo("Godfather II", 2);
$store->rateVideo("Star Wars Episode IV: A New Hope", 1);
$store->rateVideo("Star Wars Episode IV: A New Hope", 2);
$store->rateVideo("Star Wars Episode IV: A New Hope", 3);

$store->checkOutVideo("Godfather II");

echo $store->printInventory();

$application = new Application($store);
$application->run($store);








