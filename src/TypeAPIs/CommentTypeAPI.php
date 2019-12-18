<?php
namespace PoP\CommentsWP\TypeAPIs;

use WP_Comment;
use PoP\Comments\TypeAPIs\CommentTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class CommentTypeAPI implements CommentTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Comment
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfCommentType($object): bool
    {
        return $object instanceof WP_Comment;
    }
}
