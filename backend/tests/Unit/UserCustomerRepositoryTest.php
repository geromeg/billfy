<?php

namespace Tests\Unit;

use App\Models\UserCustomer;
use App\Repositories\UserCustomerRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserCustomerRepositoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create()
    {

        $response = $this->post('/api/customer',[
            'name' => 'Test',
            'email' => 'geromeg@gmail.com',
            'address' => '123'
        ]);
        $this->assertCount(1,UserCustomer::all(), 'Created Customer');

    }
    public function test_is_email_address_validation_failing_bad_data() {
        $response = $this->post('/api/customer',[
            'name' => 'Test',
            'email' => 'geromeggmail.com',
            'address' => '123'
        ]);
        $response->assertSessionHasErrors();
        $this->assertCount(0,UserCustomer::all());
    }
    public function test_is_email_address_validation_failing_good_data() {
        $response = $this->post('/api/customer',[
            'name' => 'Test',
            'email' => 'geromeg@gmail.com',
            'address' => '123'
        ]);
        $response->assertSessionHasNoErrors();
        $this->assertCount(1,UserCustomer::all());
    }
}
