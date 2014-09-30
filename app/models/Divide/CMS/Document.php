<?php

namespace Divide\CMS;

class Document extends \Eloquent {

    //protected $fillable = [];

    protected $table = 'document';

    public function categories() {
        return $this->belongsToMany('Divide\CMS\DocumentCategory', 'document_documentcategory', 'document_id', 'documentcategory_id');
    }

}
