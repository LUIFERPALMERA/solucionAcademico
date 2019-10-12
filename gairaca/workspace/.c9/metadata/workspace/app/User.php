{"filter":false,"title":"User.php","tooltip":"/app/User.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":26},"end":{"row":5,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":149,"mode":"ace/mode/php"}},"hash":"aff1c581d147c6252bf1fb66c49691b6edb9a5bd","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","","class User extends Authenticatable","{","    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'name', 'email', 'password',","    ];","","    /**","     * The attributes that should be hidden for arrays.","     *","     * @var array","     */","    protected $hidden = [","        'password', 'remember_token',","    ];","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["<?php","","namespace App;","","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","use Zizaco\\Entrust\\Traits\\EntrustUserTrait;","class User extends Authenticatable","{","    use EntrustUserTrait;","    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'nombre', 'email', ","    ];","","    /**","     * The attributes that should be hidden for arrays.","     *","     * @var array","     */","    ","    public function solicitudes()","    {","        return $this->belongsToMany('App\\Solicitude');","    }","    public function roles()","    {","        return $this->belongsToMany('App\\Role');","    }","    public function solicitudeConcepto()","    {","        return $this->hasMany('App\\Solicitude_concepto');","    }","    ","    ","    public function contieneRol($rol){","        ","        return \\Auth::user()->roles()->where('nombre',$rol)->first() == null;","    }","    ","}",""]}]]},"timestamp":1551368241000}