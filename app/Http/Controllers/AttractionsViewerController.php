<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Attractions_Pictures;

class AttractionsViewerController extends Controller
{
    public function index($title_compiled)
    {
        $attraction = Attraction::where('title_compiled', '=', $title_compiled)->first()->toArray();
        $description = nl2br($attraction['description']);

        $this->data->set('image', 'storage/attractions/' . $attraction['image_path']);
        $this->data->set('title_compiled', $title_compiled);
        $this->data->set('title', $attraction['title']);
        $this->data->set('description', $description);
        $this->data->set('qr', asset('storage/qr-codes/' .  $attraction["qr-code_path"]));
        $this->data->set("lat", $attraction["lat"]);
        $this->data->set("lon", $attraction["lon"]);

        return $this->view('viewer.get');
    }

    public function gallery($title_compiled)
    {
        $attraction = Attraction::where('title_compiled', '=', $title_compiled)->first()->toArray();
        $images = Attractions_Pictures::where('belonged_attraction', '=', $attraction['id'])->get()->toArray();
        for ($i = 0; $i < count($images); $i++) {
            $images[$i]['image_path'] = '/storage/gallery/' . $images[$i]['image_path'];
        }

        $this->data->set('images', $images);
        $this->data->set('title_compiled', $title_compiled);
        $this->data->set('title', $attraction['title']);

        return $this->view('viewer.gallery');
    }

    public function map($title_compiled)
    {
      $attraction = Attraction::where('title_compiled', '=', $title_compiled)->first()->toArray();

      $this->data->set('title_compiled', $title_compiled);
      $this->data->set("lat", $attraction["lat"]);
      $this->data->set("lon", $attraction["lon"]);

      return $this->view('viewer.map');
    }
}
