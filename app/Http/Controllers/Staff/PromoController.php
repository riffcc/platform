<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace App\Http\Controllers\Staff;

use Ramsey\Uuid\Uuid;
use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    final public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $promoLinks = Promo::all();

        return \view('Staff.promo.index', ['promoLinks' => $promoLinks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    final public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $promoLink = new Promo();
        $promoLink->user_id = $request->user()->id;
        $promoLink->uses = 0;
        $promoLink->max_uses = $request->input('max_uses');
        $promoLink->code = Uuid::uuid4()->toString();
        $promoLink->save();

        return \redirect()->route('staff.promos.index')
            ->withSuccess('Promotional Signup Link Created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    final public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $promoLink = Promo::findOrFail($id);
        $promoLink->delete();

        return \redirect()->route('staff.promos.index')
            ->withInfo('Promotional Signup Link Destroyed!');
    }
}
