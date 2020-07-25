<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('Fr-fr');

        // Gerer les utilisateurs
        $users = [];

        for ($i = 1; $i <= 10; $i++) {

            $user = new User();

            $hash = $this->encoder->encodePassword($user, 'password');

            $user->setFirstName($faker->firstName)
                 ->setLastName($faker->lastName)
                 ->setEmail($faker->email)
                 ->setHash($hash);

            $manager->persist($user);
            $users[] = $user;
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}