<?php

return [
    //Token (token)
    'token'=>env('OneNet_Token','xxxx'),
    //EncodingAESKey (message encryption and decryption key)
    'encodekey'=>env('OneNet_EncodingAESKey', 'xxxx'),
    //OneNet_APIKey (key in device operation)
    'apikey'=>env('OneNet_APIKey','xxx')
];
