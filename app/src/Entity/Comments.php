<?php

namespace App\Entity;
/**
 *
 */
class Comments
{
    private $id;
    private $user_id;
    private $post_id;
    private $content;
    private $datetime;



    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of User Id
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of User Id
     *
     * @param mixed $user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of Post Id
     *
     * @return mixed
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Set the value of Post Id
     *
     * @param mixed $post_id
     *
     * @return self
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Get the value of Content
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of Content
     *
     * @param mixed $content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of Datetime
     *
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set the value of Datetime
     *
     * @param mixed $datetime
     *
     * @return self
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

}


 ?>
