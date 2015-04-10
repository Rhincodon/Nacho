<?php

namespace spec\Rhincodon\Learn;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rhincodon\Learn\UserRepository;
use Rhincodon\Learn\Mailer;

class RegisterUserSpec extends ObjectBehavior
{
    function let(UserRepository $repository, Mailer $mailer)
    {
        $this->beConstructedWith($repository, $mailer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Rhincodon\Learn\RegisterUser');
    }

    function it_creates_a_new_user(UserRepository $repository)
    {
        $user = ['username' => 'JohnDoe', 'email' => 'test@test.com'];

        $repository->create($user)->shouldBeCalled();

        $this->register($user);
    }

    function it_sends_a_welcome_email(Mailer $mailer)
    {
        $user = ['username' => 'JohnDoe', 'email' => 'test@test.com'];

        $mailer->sendWelcome('test@test.com')->shouldBeCalled();

        $this->register($user);
    }
}
