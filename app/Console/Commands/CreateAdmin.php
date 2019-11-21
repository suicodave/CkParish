<?php

namespace App\Console\Commands;

use App\Role;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;


class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->createAdmin();
    }

    private function createAdmin()
    {
        $email = $this->ask('E-mail');

        $password = $this->secret('Password');

        $confirmPassword = $this->secret('Confirm Password');

        $name = 'Super User';

        $credentials = [
            'email' => $email,
            'name' => $name,
            'password' => bcrypt($password)
        ];


        if (!$this->validateInputs($credentials)) {
            return;
        }

        if ($confirmPassword != $password) {
            $this->line('Password confirmation does not match');

            return;
        }

        $user = User::create($credentials);

        Role::firstOrCreate(['name' => Role::ADMINISTRATOR]);

        $user->assignRole(Role::ADMINISTRATOR);

        $this->line('User has been created');
    }

    private function validateInputs($credentials)
    {
        $validator = Validator::make($credentials, [
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'name' => ['unique:users,name']
        ]);

        if ($validator->fails()) {

            $errors = $validator->errors()->all();

            foreach ($errors as $error) {
                $this->error($error);
            }

            return 0;
        }

        return 1;
    }
}
