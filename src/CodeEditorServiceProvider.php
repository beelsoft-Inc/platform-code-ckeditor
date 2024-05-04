<?php

namespace Tungnt\Admin\CodeEditor;

use Tungnt\Admin\Assets;
use Tungnt\Admin\Form;
use Tungnt\Admin\Show\Field;
use Illuminate\Support\ServiceProvider;

class CodeEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(CodeEditor $extension)
    {
        if (!CodeEditor::boot()) {
            return;
        }

        $this->loadViewsFrom($extension->views(), 'laravel-admin-code-editor');

        Assets::package([
            'name'     => 'codemirror',
            'location' => 'https://cdn.jsdelivr.net/npm/codemirror@5.57.0',
            'main'     => 'lib/codemirror'
        ]);

        Form::extend('code', Editor::class);
        Field::macro('code', CodeEditor::show());
    }
}
