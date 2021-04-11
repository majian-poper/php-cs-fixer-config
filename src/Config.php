<?php

declare(strict_types=1);

namespace Poper\PhpCsFixer;

use PhpCsFixer\Config as PhpCsFixerConfig;

class Config extends PhpCsFixerConfig
{
    public function __construct()
    {
        parent::__construct('POPER');

        $this->setRiskyAllowed(true);
    }

    public function getRules(): array
    {
        return [
            '@PSR12' => true,

            // Laravel like
            'array_syntax' => ['syntax' => 'short'], // short_array_syntax
            'binary_operator_spaces' => ['default' => 'single_space'],
            'blank_line_before_statement' => ['statements' => ['return']], // blank_line_before_return
            // 'cast_spaces' => true,
            'cast_spaces' => ['space' => 'none'],
            'class_attributes_separation' => true, // method_separation
            'concat_space' => true, // concat_without_spaces
            'function_typehint_space' => true,
            'heredoc_to_nowdoc' => true,
            'increment_style' => ['style' => 'post'], // post_increment
            'include' => true,
            'list_syntax' => ['syntax' => 'short'], // short_list_syntax
            'lowercase_constants' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'multiline_whitespace_before_semicolons' => true, // no_multiline_whitespace_before_semicolons
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => ['tokens' => ['extra', 'throw', 'use', 'use_trait']], // no_extra_consecutive_blank_lines, no_blank_lines_after_throw, no_blank_lines_between_imports, no_blank_lines_between_traits
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => ['use' => 'echo'], // print_to_echo
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => ['positions' => ['inside']], // no_spaces_inside_offset
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unused_imports' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'normalize_index_brace' => true,
            // 'not_operator_with_successor_space' => true,
            'object_operator_without_whitespace' => true,
            'ordered_imports' => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha'], // alpha_ordered_imports
            'phpdoc_align' => ['align' => 'left'], // align_phpdoc, Not work as laravel presets
            'phpdoc_indent' => true,
            'phpdoc_inline_tag' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => ['replacements' => ['type' => 'var']], // phpdoc_type_to_var
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_scalar' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_to_comment' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'simplified_null_return' => true,
            'single_class_element_per_statement' => true,
            'single_line_comment_style' => ['comment_types' => ['hash']], // hash_to_slash_comment
            'single_quote' => true,
            'space_after_semicolon' => ['remove_in_empty_for_expressions' => true],
            'standardize_not_equals' => true,
            'trailing_comma_in_multiline_array' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'whitespace_after_comma_in_array' => true,

            // Risky
            'no_alias_functions' => true, // Risky
            'no_unreachable_default_argument_value' => true, // Risky
            'psr_autoloading' => true, // Risky

            // Customize
            'array_indentation' => true,
            'method_chaining_indentation' => true,
        ];
    }
}
