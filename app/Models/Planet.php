<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    public function star() {
        return $this->belongsTo(Star::class);
    }

    public function moons() {
        return $this->hasMany(Moon::class);
    }

    public function overview() {
        return $this->hasOne(Overview::class);
    }

    public function features() {
        return $this->morphMany(Features::class, 'featureable');
    }

    public function environment() {
        return $this->hasOne(Environment::class);
    }

    public function atmosphere() {
        return $this->hasOne(Atmosphere::class);
    }

    public function atmosphereQuery($planet_id) {
        $atmosphere = Atmosphere::select(['argon', 'carbon_dioxide', 'helium', 'hydrogen', 'methane', 'nitrogen', 'other', 'oxygen', 'sodium'])->where('planet_id', $planet_id)->get()->shift();

        return $atmosphere;
    }

    public function atmosphericBreakdown($planet_id) {
        $atmosphere = $this->planetAtmosphere($planet_id)->toArray();

        $x = 0;
        $colours = ["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56"];

        $html = '<table class="element-table" width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td width="50%">Element</td><td width="50%">Value (%)</td></tr>';
        foreach($atmosphere as $element => $value) :
        $html .= '<tr style="background:' . $colours[$x] . '"><td width="50%">' . ucfirst($element) . '</td><td width="50%">' . $value . '</td></tr>';
        $x++; endforeach;
        $html .= '</table>';

        return $html;
    }

    public function largestAtmosphericElement($planet_id) {
        $atmosphereEls = $this->atmosphereQuery($planet_id);

        $highest_value = (max($atmosphereEls->toArray()));
        $highest_key = (array_search(max($atmosphereEls->toArray()), $atmosphereEls->toArray()));

        $atmosphereEls->maxKey = $highest_key;
        $atmosphereEls->maxValue = $highest_value;

        return $atmosphereEls;
    }

    public function planetAtmosphere($planet_id) {
        $atmosphere = $this->atmosphereQuery($planet_id);

        if( $atmosphere['argon'] === 0.0) { unset($atmosphere['argon']); }
        if( $atmosphere['carbon_dioxide'] === 0.0) { unset($atmosphere['carbon_dioxide']); }
        if( $atmosphere['helium'] === 0.0) { unset($atmosphere['helium']); }
        if( $atmosphere['hydrogen'] === 0.0) { unset($atmosphere['hydrogen']); }
        if( $atmosphere['methane'] === 0.0) { unset($atmosphere['methane']); }
        if( $atmosphere['nitrogen'] === 0.0) { unset($atmosphere['nitrogen']); }
        if( $atmosphere['other'] === 0.0) { unset($atmosphere['other']); }
        if( $atmosphere['oxygen'] === 0.0) { unset($atmosphere['oxygen']); }
        if( $atmosphere['sodium'] === 0.0) { unset($atmosphere['sodium']); } 

        return $atmosphere;
    }
}
 