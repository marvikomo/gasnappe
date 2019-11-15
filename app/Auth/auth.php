<?php


namespace App\Auth;
use App\Libs\JWT;
use Exception;
use Psr\Container\ContainerInterface;

class Auth
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function register($name, $email, $official_mail, $number, $password,  $landmark,$enrollment_no,$year_of_call,$LGA,$profile)
    {

        $user = User::firstOrCreate(['email' => $email],
            [
                'name' => $name,
                'email' => $email,
                'official_mail' => $official_mail,
                'password' => $password,
                'number' => $number,
                'landmark' => $landmark,
                'enrollment_number' => $enrollment_no,
                'year_of_call' => $year_of_call,
                'LGA' => $LGA,
                'profile' => $profile,
                'otp' => rand(10000, 99999)

            ]);

        if ($user->wasRecentlyCreated) {
            $user->jid = $this->getJID($user->role, $user->id);
            $user->save();


            if ($role == 1) {
                $user->driver()->firstOrCreate(['user_id' => $user->id], [
                    'user_id' => $user->id,
                    'manager_id' => $manager,
                ]);
            }

            $user->wallet()->firstOrCreate(['user_id' => $user->id],
                [
                    'balance' => 0,
                    'ledger_balance' => 0,
                ]);


            $response['SMS_OTP'] = $this->container->sms->sendOTPSMS($user->contact_name, $user->contact_phone, $user->otp);
            $response['EMAIL_OTP'] = $this->container->email->sendOTP($user->makeVisible('otp')->toArray());
        } else {
            $user->contact_phone = $phone;
            $user->password = $password;
            $user->save();
        }
        $user = $user->fresh();

        $response['error'] = false;
        $response['message'] = 'Registration successful2!';
        $response['data'] = $user->toArray();
        return $response;
    }


}