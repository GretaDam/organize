<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'Le champ doit être accepté.',
    'accepted_if'          => 'Le champ  doit être accepté quand :other a la valeur :value.',
    'active_url'           => 'Le champ  n\'est pas une URL valide.',
    'after'                => 'Le champ  doit être une date postérieure au :date.',
    'after_or_equal'       => 'Le champ  doit être une date postérieure ou égale au :date.',
    'alpha'                => 'Le champ  doit contenir uniquement des lettres.',
    'alpha_dash'           => 'Le champ  doit contenir uniquement des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'Le champ  doit contenir uniquement des chiffres et des lettres.',
    'array'                => 'Le champ  doit être un tableau.',
    'attached'             => ' est déjà attaché(e).',
    'before'               => 'Le champ  doit être une date antérieure au :date.',
    'before_or_equal'      => 'Le champ  doit être une date antérieure ou égale au :date.',
    'between'              => [
        'array'   => 'Le tableau  doit contenir entre :min et :max éléments.',
        'file'    => 'La taille du fichier de  doit être comprise entre :min et :max kilo-octets.',
        'numeric' => 'La valeur de  doit être comprise entre :min et :max.',
        'string'  => 'Le texte  doit contenir entre :min et :max caractères.',
    ],
    'boolean'              => 'Le champ  doit être vrai ou faux.',
    'confirmed'            => 'Le champ de confirmation  ne correspond pas.',
    'current_password'     => 'Le mot de passe est incorrect.',
    'date'                 => 'Le champ  n\'est pas une date valide.',
    'date_equals'          => 'Le champ  doit être une date égale à :date.',
    'date_format'          => 'Le champ  ne correspond pas au format :format.',
    'different'            => 'Les champs  et :other doivent être différents.',
    'digits'               => 'Le champ  doit contenir :digits chiffres.',
    'digits_between'       => 'Le champ  doit contenir entre :min et :max chiffres.',
    'dimensions'           => 'La taille de l\'image  n\'est pas conforme.',
    'distinct'             => 'Le champ  a une valeur en double.',
    'email'                => 'Le champ  doit être une adresse e-mail valide.',
    'ends_with'            => 'Le champ  doit se terminer par une des valeurs suivantes : :values',
    'exists'               => 'Le champ  sélectionné est invalide.',
    'file'                 => 'Le champ  doit être un fichier.',
    'filled'               => 'Le champ  doit avoir une valeur.',
    'gt'                   => [
        'array'   => 'Le tableau  doit contenir plus de :value éléments.',
        'file'    => 'La taille du fichier de  doit être supérieure à :value kilo-octets.',
        'numeric' => 'La valeur de  doit être supérieure à :value.',
        'string'  => 'Le texte  doit contenir plus de :value caractères.',
    ],
    'gte'                  => [
        'array'   => 'Le tableau  doit contenir au moins :value éléments.',
        'file'    => 'La taille du fichier de  doit être supérieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de  doit être supérieure ou égale à :value.',
        'string'  => 'Le texte  doit contenir au moins :value caractères.',
    ],
    'image'                => 'Le champ  doit être une image.',
    'in'                   => 'Le champ  est invalide.',
    'in_array'             => 'Le champ  n\'existe pas dans :other.',
    'integer'              => 'Le champ  doit être un entier.',
    'ip'                   => 'Le champ  doit être une adresse IP valide.',
    'ipv4'                 => 'Le champ  doit être une adresse IPv4 valide.',
    'ipv6'                 => 'Le champ  doit être une adresse IPv6 valide.',
    'json'                 => 'Le champ  doit être un document JSON valide.',
    'lt'                   => [
        'array'   => 'Le tableau  doit contenir moins de :value éléments.',
        'file'    => 'La taille du fichier de  doit être inférieure à :value kilo-octets.',
        'numeric' => 'La valeur de  doit être inférieure à :value.',
        'string'  => 'Le texte  doit contenir moins de :value caractères.',
    ],
    'lte'                  => [
        'array'   => 'Le tableau  doit contenir au plus :value éléments.',
        'file'    => 'La taille du fichier de  doit être inférieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de  doit être inférieure ou égale à :value.',
        'string'  => 'Le texte  doit contenir au plus :value caractères.',
    ],
    'max'                  => [
        'array'   => 'Le tableau  ne peut contenir plus de :max éléments.',
        'file'    => 'La taille du fichier de  ne peut pas dépasser :max kilo-octets.',
        'numeric' => 'La valeur de  ne peut être supérieure à :max.',
        'string'  => 'Le texte de  ne peut contenir plus de :max caractères.',
    ],
    'mimes'                => 'Le champ  doit être un fichier de type : :values.',
    'mimetypes'            => 'Le champ  doit être un fichier de type : :values.',
    'min'                  => [
        'array'   => 'Le tableau  doit contenir au moins :min éléments.',
        'file'    => 'La taille du fichier de  doit être supérieure à :min kilo-octets.',
        'numeric' => 'La valeur de  doit être supérieure ou égale à :min.',
        'string'  => 'Le texte  doit contenir au moins :min caractères.',
    ],
    'multiple_of'          => 'La valeur de  doit être un multiple de :value',
    'not_in'               => 'Le champ  sélectionné n\'est pas valide.',
    'not_regex'            => 'Le format du champ  n\'est pas valide.',
    'numeric'              => 'Le champ  doit contenir un nombre.',
    'password'             => 'Le mot de passe est incorrect',
    'present'              => 'Le champ  doit être présent.',
    'prohibited'           => 'Le champ  est interdit.',
    'prohibited_if'        => 'Le champ  est interdit quand :other a la valeur :value.',
    'prohibited_unless'    => 'Le champ  est interdit à moins que :other est l\'une des valeurs :values.',
    'prohibits'            => 'Le champ  interdit :other d\'être présent.',
    'regex'                => 'Le format du champ  est invalide.',
    'relatable'            => ' n\'est sans doute pas associé(e) avec cette donnée.',
    'required'             => 'Le champ  est obligatoire.',
    'required_if'          => 'Le champ  est obligatoire quand la valeur de :other est :value.',
    'required_unless'      => 'Le champ  est obligatoire sauf si :other est :values.',
    'required_with'        => 'Le champ  est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ  est obligatoire quand :values sont présents.',
    'required_without'     => 'Le champ  est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ  est requis quand aucun de :values n\'est présent.',
    'same'                 => 'Les champs  et :other doivent être identiques.',
    'size'                 => [
        'array'   => 'Le tableau  doit contenir :size éléments.',
        'file'    => 'La taille du fichier de  doit être de :size kilo-octets.',
        'numeric' => 'La valeur de  doit être :size.',
        'string'  => 'Le texte de  doit contenir :size caractères.',
    ],
    'starts_with'          => 'Le champ  doit commencer avec une des valeurs suivantes : :values',
    'string'               => 'Le champ  doit être une chaîne de caractères.',
    'timezone'             => 'Le champ  doit être un fuseau horaire valide.',
    'unique'               => 'La valeur du champ  est déjà utilisée.',
    'uploaded'             => 'Le fichier du champ  n\'a pu être téléversé.',
    'url'                  => 'Le format de l\'URL de  n\'est pas valide.',
    'uuid'                 => 'Le champ  doit être un UUID valide',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];