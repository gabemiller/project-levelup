<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "A(z) :attribute el kell legyen fogadva!",
    "active_url"       => "A(z) :attribute nem létező link.",
    "after"            => "A(z) :attribute legalább :date utáni dátum kell, hogy legyen!",
    "alpha"            => "A(z) :attribute kizárólag betűket tartalmazhat!",
    "alpha_dash"       => "A(z) :attribute kizárólag betűket, számokat és kötőjeleket tartalmazhat!",
    "alpha_num"        => "A(z) :attribute kizárólag betűket és számokat tartalmazhat!",
    "array"            => "The :attribute must be an array.",
    "before"           => "A(z) :attribute legalább :date előtti dátum kell, hogy legyen!",
    "between"          => array(
        "numeric" => "A(z) :attribute :min és :max közötti szám kell, hogy legyen!",
        "file"    => "A(z) :attribute mérete :min és :max kilobájt között kell, hogy legyen!",
        "string"  => "A(z) :attribute hossza :min és :max karakter között kell, hogy legyen!",
        "array"   => "The :attribute must have between :min - :max items."
    ),
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "A(z) :attribute nem egyezik a megerősítéssel.",
    "date"             => "A(z) :attribute nem érvényes dátum.",
    "date_format"      => "A(z) :attribute nem egyezik az alábbi dátum formátummal :format!",
    "different"        => "A(z) :attribute és :other értékei különbözőek kell, hogy legyenek!",
    "digits"           => "A(z) :attribute :digits számjegyűnek kell lennie!",
    "digits_between"   => "A(z) :attribute értéke :min és :max közötti számjegy lehet!",
    "email"            => "A(z) :attribute nem érvényes email formátum.",
    "exists"           => "A(z) :attribute már létezik.",
    "image"            => "A(z) :attribute képfájl kell, hogy legyen!",
    "in"               => "A kiválasztott :attribute érvénytelen.",
    "integer"          => "A(z) :attribute értéke szám kell, hogy legyen!",
    "ip"               => "A(z) :attribute érvényes IP cím kell, hogy legyen!",
    "max"              => array(
        "numeric" => "A(z) :attribute értéke nem lehet nagyobb, mint :max!",
        "file"    => "A(z) :attribute mérete nem lehet több, mint :max kilobájt.",
        "string"  => "A(z) :attribute hossza nem lehet több, mint :max karakter.",
        "array"   => "The :attribute may not have more than :max items."
    ),
    "mimes"            => "A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.",
    "min"              => array(
        "numeric" => "A(z) :attribute értéke nem lehet kisebb, mint :min!",
        "file"    => "A(z) :attribute mérete nem lehet több, mint :min kilobájt.",
        "string"  => "A(z) :attribute hossza nem lehet több, mint :min karakter.",
        "array"   => "The :attribute must have at least :min items."
    ),
    "not_in"           => "A(z) :attribute értéke érvénytelen.",
    "numeric"          => "A(z) :attribute szám kell, hogy legyen!",
    "regex"            => "A(z) :attribute formátuma érvénytelen.",
    "required"         => "A(z) :attribute megadása kötelező!",
    "required_if"      => "A(z) :attribute megadása kötelező, ha a(z) :other értéke :value!",
    "required_with"    => "A(z) :attribute megadása kötelező, ha a(z) :values értékek léteznek.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "A(z) :attribute megadása kötelező, ha a(z) :values értékek nem léteznek.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "A(z) :attribute és :other mezőknek egyezniük kell!",
    "size"             => array(
        "numeric" => "A(z) :attribute értéke :size kell, hogy legyen!",
        "file"    => "A(z) :attribute mérete :size kilobájt kell, hogy legyen!",
        "string"  => "A(z) :attribute hossza :size karakter kell, hogy legyen!",
        "array"   => "The :attribute must contain :size items."
    ),
    "unique"           => "A(z) :attribute már foglalt.",
    "url"              => "A(z) :attribute érvénytelen link.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);