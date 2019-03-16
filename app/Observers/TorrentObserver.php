<?php

namespace App\Observers;

use App\Models\Torrent;

class TorrentObserver
{
    /**
     * Handle the torrent "created" event.
     *
     * @param  \App\Torrent  $torrent
     * @return void
     */
    public function created(Torrent $torrent)
    {
        //
    }

    /**
     * Handle the torrent "updated" event.
     *
     * @param  \App\Torrent  $torrent
     * @return void
     */
    public function updated(Torrent $torrent)
    {
        //
    }

    /**
     * Handle the torrent "deleted" event.
     *
     * @param  \App\Torrent  $torrent
     * @return void
     */
    public function deleted(Torrent $torrent)
    {
        $torrent->peers()->delete();
        $torrent->history()->delete();
        $torrent->hitrun()->delete();
        $torrent->files()->delete();
        if ($torrent->featured == 1) {
            $torrent->featured()->delete();
        }
    }

    /**
     * Handle the torrent "restored" event.
     *
     * @param  \App\Torrent  $torrent
     * @return void
     */
    public function restored(Torrent $torrent)
    {
        //
    }

    /**
     * Handle the torrent "force deleted" event.
     *
     * @param  \App\Torrent  $torrent
     * @return void
     */
    public function forceDeleted(Torrent $torrent)
    {
        //
    }
}
