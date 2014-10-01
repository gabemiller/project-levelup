<?php

namespace Divide\CMS;

class DocumentCategory extends \Eloquent {

    protected $table = 'documentcategory';

    /**
     *
     * @var type 
     */
    protected $fillable = ['name'];

    /**
     * 
     * @return type
     */
    public function documents() {
        return $this->belongsToMany('Divide\CMS\Document', 'document_documentcategory', 'documentcategory_id', 'document_id');
    }

    /**
     * 
     * @return type
     */
    public function ancestor() {
        return $this->belongsTo('Divide\CMS\DocumentCategory', 'id', 'parent');
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    public static function getCategories($id = 0) {

        $array = array(0 => 'Nincs');

        foreach (DocumentCategory::where('id', '<>', $id)->get(['id', 'name']) as $docCategory) {
            $array[$docCategory->id] = $docCategory->name;
        }

        return $array;
    }

}
