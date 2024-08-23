<?php

return [

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

    'accepted' => 'Field :attribute harus diterima.',
    'accepted_if' => ':attribute field harus diterima ketika :other adalah :value.',
    'active_url' => ':attribute field harus berupa URL yang valid.',
    'after' => ':attribute field harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute field harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute field hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute field hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => ':attribute field hanya boleh berisi huruf dan angka.',
    'array' => ':attribute field harus berupa array.',
    'ascii' => ':attribute field hanya boleh berisi karakter alfanumerik dan simbol satu byte.',
    'before' => ':attribute field harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute field harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ':attribute field harus memiliki antara :min dan :max item.',
        'file' => ':attribute field harus berukuran antara :min dan :max kilobyte.',
        'numeric' => ':attribute field harus bernilai antara :min dan :max.',
        'string' => ':attribute field harus memiliki panjang antara :min dan :max karakter.',
    ],
    'boolean' => ':attribute field harus bernilai benar atau salah.',
    'can' => ':attribute field berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi :attribute field tidak cocok.',
    'contains' => ':attribute field tidak memiliki nilai yang diperlukan.',
    'current_password' => 'Kata sandi salah.',
    'date' => ':attribute field harus berupa tanggal yang valid.',
    'date_equals' => ':attribute field harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute field harus sesuai dengan format :format.',
    'decimal' => ':attribute field harus memiliki :decimal tempat desimal.',
    'declined' => ':attribute field harus ditolak.',
    'declined_if' => ':attribute field harus ditolak ketika :other adalah :value.',
    'different' => ':attribute field dan :other harus berbeda.',
    'digits' => ':attribute field harus terdiri dari :digits digit.',
    'digits_between' => ':attribute field harus memiliki antara :min dan :max digit.',
    'dimensions' => ':attribute field memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':attribute field memiliki nilai yang duplikat.',
    'doesnt_end_with' => ':attribute field tidak boleh diakhiri dengan salah satu dari berikut: :values.',
    'doesnt_start_with' => ':attribute field tidak boleh dimulai dengan salah satu dari berikut: :values.',
    'email' => ':attribute field harus berupa alamat email yang valid.',
    'ends_with' => ':attribute field harus diakhiri dengan salah satu dari berikut: :values.',
    'enum' => ':attribute yang dipilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'extensions' => ':attribute field harus memiliki salah satu ekstensi berikut: :values.',
    'file' => ':attribute field harus berupa file.',
    'filled' => ':attribute field harus memiliki nilai.',
    'gt' => [
        'array' => ':attribute field harus memiliki lebih dari :value item.',
        'file' => ':attribute field harus lebih besar dari :value kilobyte.',
        'numeric' => ':attribute field harus lebih besar dari :value.',
        'string' => ':attribute field harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => ':attribute field harus memiliki :value item atau lebih.',
        'file' => ':attribute field harus lebih besar dari atau sama dengan :value kilobyte.',
        'numeric' => ':attribute field harus lebih besar dari atau sama dengan :value.',
        'string' => ':attribute field harus lebih besar dari atau sama dengan :value karakter.',
    ],
    'hex_color' => ':attribute field harus berupa warna heksadesimal yang valid.',
    'image' => ':attribute field harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute field harus ada di :other.',
    'integer' => ':attribute field harus berupa bilangan bulat.',
    'ip' => ':attribute field harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute field harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute field harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute field harus berupa string JSON yang valid.',
    'list' => ':attribute field harus berupa daftar.',
    'lowercase' => ':attribute field harus berupa huruf kecil.',
    'lt' => [
        'array' => ':attribute field harus memiliki kurang dari :value item.',
        'file' => ':attribute field harus kurang dari :value kilobyte.',
        'numeric' => ':attribute field harus kurang dari :value.',
        'string' => ':attribute field harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ':attribute field tidak boleh memiliki lebih dari :value item.',
        'file' => ':attribute field harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => ':attribute field harus kurang dari atau sama dengan :value.',
        'string' => ':attribute field harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => ':attribute field harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => ':attribute field tidak boleh memiliki lebih dari :max item.',
        'file' => ':attribute field tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => ':attribute field tidak boleh lebih besar dari :max.',
        'string' => ':attribute field tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => ':attribute field tidak boleh memiliki lebih dari :max digit.',
    'mimes' => ':attribute field harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute field harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => ':attribute field harus memiliki setidaknya :min item.',
        'file' => ':attribute field harus setidaknya :min kilobyte.',
        'numeric' => ':attribute field harus setidaknya :min.',
        'string' => ':attribute field harus setidaknya :min karakter.',
    ],
    'min_digits' => ':attribute field harus memiliki setidaknya :min digit.',
    'missing' => ':attribute field harus tidak ada.',
    'missing_if' => ':attribute field harus tidak ada ketika :other adalah :value.',
    'missing_unless' => ':attribute field harus tidak ada kecuali :other adalah :value.',
    'missing_with' => ':attribute field harus tidak ada ketika :values ada.',
    'missing_with_all' => ':attribute field harus tidak ada ketika :values ada.',
    'multiple_of' => ':attribute field harus merupakan kelipatan dari :value.',
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute field tidak valid.',
    'numeric' => ':attribute field harus berupa angka.',
    'password' => [
        'letters' => ':attribute field harus mengandung setidaknya satu huruf.',
        'mixed' => ':attribute field harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => ':attribute field harus mengandung setidaknya satu angka.',
        'symbols' => ':attribute field harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],
    'present' => ':attribute field harus ada.',
    'present_if' => ':attribute field harus ada ketika :other adalah :value.',
    'present_unless' => ':attribute field harus ada kecuali :other adalah :value.',
    'present_with' => ':attribute field harus ada ketika :values ada.',
    'present_with_all' => ':attribute field harus ada ketika :values ada.',
    'prohibited' => ':attribute field dilarang.',
    'prohibited_if' => ':attribute field dilarang ketika :other adalah :value.',
    'prohibited_unless' => ':attribute field dilarang kecuali :other ada dalam :values.',
    'prohibits' => ':attribute field melarang :other untuk ada.',
    'regex' => 'Format :attribute field tidak valid.',
    'required' => ':attribute field wajib diisi.',
    'required_array_keys' => ':attribute field harus berisi entri untuk: :values.',
    'required_if' => ':attribute field wajib diisi ketika :other adalah :value.',
    'required_if_accepted' => ':attribute field wajib diisi ketika :other diterima.',
    'required_if_declined' => ':attribute field wajib diisi ketika :other ditolak.',
    'required_unless' => ':attribute field wajib diisi kecuali :other ada dalam :values.',
    'required_with' => ':attribute field wajib diisi ketika :values ada.',
    'required_with_all' => ':attribute field wajib diisi ketika :values ada.',
    'required_without' => ':attribute field wajib diisi ketika :values tidak ada.',
    'required_without_all' => ':attribute field wajib diisi ketika tidak ada satupun dari :values yang ada.',
    'same' => ':attribute field harus sama dengan :other.',
    'size' => [
        'array' => ':attribute field harus berisi :size item.',
        'file' => ':attribute field harus berukuran :size kilobyte.',
        'numeric' => ':attribute field harus berukuran :size.',
        'string' => ':attribute field harus berisi :size karakter.',
    ],
    'starts_with' => ':attribute field harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => ':attribute field harus berupa string.',
    'timezone' => ':attribute field harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal diunggah.',
    'uppercase' => ':attribute field harus berupa huruf besar.',
    'url' => ':attribute field harus berupa URL yang valid.',
    'ulid' => ':attribute field harus berupa ULID yang valid.',
    'uuid' => ':attribute field harus berupa UUID yang valid.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
