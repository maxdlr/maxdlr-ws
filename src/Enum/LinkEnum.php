<?php

namespace App\Enum;

use Doctrine\Common\Collections\ArrayCollection;
use phpDocumentor\Reflection\Types\This;

enum LinkEnum: string
{
    case MOTION_TITLE = 'Motion design';
    case MOTION_DESC = 'All my motion design work. Animation services, gifs, showreel and much more.';
    case MOTION_LINK = '/motion';
    case QIMONO_TITLE = 'Qimono';
    case QIMONO_DESC = 'Motion design duo founded with Augusta Sarlin. Qimono Focuses on high end animation. We started this by working for clients but it rapidly became a place for us to express ourselves creatively.';
    case QIMONO_LINK = '/qimono';
    case MOTIONTOBER_TITLE = 'Motiontober';
    case MOTIONTOBER_DESC = 'Motion Design challenge: Create and post online one animation per day during the entire month of October, every year. This challenge became a community full of wonderful, helpful, loving, creative and fun people that I am proud to have had created with my partner Augusta Sarlin.';
    case MOTIONTOBER_LINK = '/mtb';
    case BAMSYSTEM_TITLE = 'BamSystem';
    case BAMSYSTEM_DESC = 'Static fun website done with Benjamin Richard and Anthony Pham in about 10 days after just a couple of weeks of learning web development.';
    case BAMSYSTEM_LINK = '/bamsystem';
    case GAMINGGURUS_TITLE = 'Gaming Gurus';
    case GAMINGGURUS_DESC = 'First Symfony project done with Frédéric Moutin and Valentin Inacio in a couple of months after 3 months of learning PHP and Symfony. Even though this is a rather simple project, I was quite proud of what we were able to make during that bootcamp';
    case GAMINGGURUS_LINK = '/gaminggurus';

    static function getAllProjects(): ArrayCollection
    {
        $motionProjects = self::getMotionProjects();
        $devProjects = self::getDevProjects();

        $allProjects = new ArrayCollection();

        foreach ($motionProjects as $key => $projects) {
            $allProjects->add($projects);
        }

        foreach ($devProjects as $projects) {
            $allProjects->add($projects);
        }

        return $allProjects;
    }

    static function getMotionProjects(): ArrayCollection
    {
        $motionProjects = new ArrayCollection();

        $motionProjects->add([
            'title' => self::MOTION_TITLE,
            'description' => self::MOTION_DESC,
            'link' => self::MOTION_LINK
        ],
        );
        $motionProjects->add([
            'title' => self::QIMONO_TITLE,
            'description' => self::QIMONO_DESC,
            'link' => self::QIMONO_LINK
        ]);
        $motionProjects->add([
            'title' => self::MOTIONTOBER_TITLE,
            'description' => self::MOTIONTOBER_DESC,
            'link' => self::MOTIONTOBER_LINK
        ]);

        return $motionProjects;
    }

    static function getDevProjects(): ArrayCollection
    {
        $devProjects = new ArrayCollection();

        $devProjects->add([
            'title' => self::GAMINGGURUS_TITLE,
            'description' => self::GAMINGGURUS_DESC,
            'link' => self::GAMINGGURUS_LINK
        ]);
        $devProjects->add([
            'title' => self::BAMSYSTEM_TITLE,
            'description' => self::BAMSYSTEM_DESC,
            'link' => self::BAMSYSTEM_LINK
        ]);

        return $devProjects;
    }

    static function getAllTitles(): array
    {
        return [
            self::MOTION_TITLE,
            self::QIMONO_TITLE,
            self::MOTIONTOBER_TITLE,
            self::BAMSYSTEM_TITLE,
            self::GAMINGGURUS_TITLE
        ];
    }

    static function getAllDescription(): array
    {
        return [
            self::MOTION_DESC,
            self::QIMONO_DESC,
            self::MOTIONTOBER_DESC,
            self::BAMSYSTEM_DESC,
            self::GAMINGGURUS_DESC
        ];
    }

    static function getAllLinks(): array
    {
        return [
            self::MOTION_LINK,
            self::QIMONO_LINK,
            self::MOTIONTOBER_LINK,
            self::BAMSYSTEM_LINK,
            self::GAMINGGURUS_LINK
        ];
    }
}