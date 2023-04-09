<?php

namespace App\Constants;
class UserConstants
{
    const EMAIL = 'email';
    const PHONE = 'phone';

    const PRIMARY_CONTACT = self::EMAIL;

    const PRIMARY_CONTACT_LIST = [
        self::EMAIL,
        self::PHONE
    ];
}