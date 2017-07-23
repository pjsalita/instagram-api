<?php

namespace Instagram\SDK\DTO\Interfaces;

interface UserInterface
{

    /**
     * Returns the id.
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Returns the username.
     *
     * @return string
     */
    public function getUsername(): string;

    /**
     * Returns the fullname.
     *
     * @return string|null
     */
    public function getFullname(): ?string;

    /**
     * Returns true if the profile is private, false otherwise.
     *
     * @return bool
     */
    public function isPrivate(): bool;

    /**
     * Returns the profile picture url.
     *
     * @return string
     */
    public function getProfilePictureUrl(): string;

    /**
     * Returns true if the profile has a anonymous profile picture, false otherwise.
     *
     * @return bool
     */
    public function hasAnonymousProfilePicture(): bool;

    /**
     * Returns true if verified, false otherwise.
     *
     * @return bool
     */
    public function isVerified(): bool;
}
