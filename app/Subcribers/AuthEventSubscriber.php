<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 *
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 * @author     HDVinnie
 */

namespace App\Subscribers;

use Illuminate\Events\Dispatcher;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Lockout;

class AuthEventSubscriber
{
    /**
     * Register The Listeners For The Subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(Login::class, [$this, 'onUserLogin']);
        $events->listen(Failed::class, [$this, 'onUserLoginFailed']);
        $events->listen(Lockout::class, [$this, 'onUserLoginLockout']);
        $events->listen(Logout::class, [$this, 'onUserLogout']);
    }

    /**
     * Handle User Login Events.
     */
    public function onUserLogin(Login $event) {
        //
    }

    /**
     * Handle User Login Failed Events.
     */
    public function onUserLoginFailed(Failed $event) {
        //
    }

    /**
     * Handle User Lockout Events.
     */
    public function onUserLoginLockout(Lockout $event) {
        //
    }

    /**
     * Handle User Logout Events.
     */
    public function onUserLogout(Logout $event) {
        //
    }
}