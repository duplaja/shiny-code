<?php
/**
 * Main plugin file.
 *
 * @package ShinyCode
 * @since 0.1.0
 * @copyright Copyright (c) 2018 Cedaro, LLC
 * @license   GPL-2.0-or-later
 */

declare ( strict_types = 1 );

namespace Cedaro\WP\BlockType\Code;

use Cedaro\WP\Plugin\AbstractPlugin;

/**
 * Main plugin class.
 *
 * @package ShinyCode
 * @since 0.1.0
 */
class Plugin extends AbstractPlugin {
	/**
	 * Retrieve code language settings.
	 *
	 * @since 0.1.0
	 *
	 * @return array
	 */
	public function get_languages(): array {
		$languages = [
			 'bash' => [
                                'name'       => esc_html__( 'Bash / Shell', 'shiny-code' ),
                                'codemirror' => [
                                        'autoCloseBrackets' => true,
                                        'matchBrackets'     => true,
                                        'mode'          => 'shell',
                                ],
                        ],
			'css'        => [
				'name'       => esc_html__( 'CSS', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
				],
			],
			'html'       => [
				'name'       => esc_html__( 'HTML', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'autoCloseTags'     => true,
					'matchTags'         => [
						'bothTags' => true,
					],
					'mode'              => 'htmlmixed',
				],
			],
			'java' => [
				'name'       => esc_html__( 'Java', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
					'mode'				=> 'clike',
				],
			],
			'javascript' => [
				'name'       => esc_html__( 'JavaScript', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
				],
			],
			'json'       => [
				'name'       => esc_html__( 'JSON', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
					'mode'              => [
						'name' => 'javascript',
						'json' => true,
					],
				],
			],
			'markdown' => [
				'name'       => esc_html__( 'Markdown', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
					'mode'				=> 'markdown',
				],
			],
			'nginx' => [
				'name'       => esc_html__( 'nginx', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
					'mode'				=> 'nginx',
				],
			],

			'php'        => [
				'name'       => esc_html__( 'PHP', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'autoCloseTags'     => true,
					'matchBrackets'     => true,
					'matchTags'         => [
						'bothTags' => true,
					],
				],
			],
			'python' => [
				'name'       => esc_html__( 'Python', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
				],
			],
			'jsx' => [
				'name'       => esc_html__( 'React JSX', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
					'mode'				=> 'jsx',
				],
			],

			'sql' => [
				'name'       => esc_html__( 'SQL', 'shiny-code' ),
				'codemirror' => [
					'autoCloseBrackets' => true,
					'matchBrackets'     => true,
					'mode'				=> 'sql',
				],
			],
		];

		return apply_filters( 'shiny_code_languages', $languages );
	}

	/**
	 * Retrieve syntax highlighting theme settings.
	 *
	 * @since 0.1.0
	 *
	 * @return array
	 */
	public function get_themes(): array {
		$themes = [
			'atom-one-dark'  => [
				'name'       => esc_html__( 'Atom One Dark', 'shiny-code' ),
				'codemirror' => '',
				'prism'      => $this->get_url( 'build/css/themes/atom-one-dark/prism.css' ),
			],
			'atom-one-light' => [
				'name'       => esc_html__( 'Atom One Light', 'shiny-code' ),
				'codemirror' => '',
				'prism'      => $this->get_url( 'build/css/themes/atom-one-light/prism.css' ),
			],
		];

		return apply_filters( 'shiny_code_themes', $themes );
	}
}
