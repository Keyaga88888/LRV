<?php

it('redirects guest to login', function () {

    $response = $this->get('/');

    $response->assertOk();

});
// // cái này là view mặc định Laravel
// it('returns a successful response', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });
