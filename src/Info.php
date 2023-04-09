<?php
namespace CoreUI;

/**
 *
 */
class Info {

    /**
     * @param string     $type
     * @param string     $message
     * @param array|null $options
     * @return array
     */
    public static function create(string $type, string $message, array $options = null): array {

        $data = [
            'component' => 'coreui.info',
            'type'      => $type,
            'message'   => $message
        ];

        return array_merge($data, $options);
    }


    /**
     * Возвращает данные сообщения primary
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function primary(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('primary', $message, $options);
    }


    /**
     * Возвращает данные сообщения secondary
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function secondary(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('secondary', $message, $options);
    }


    /**
     * Возвращает данные сообщения success
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function success(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('success', $message, $options);
    }


    /**
     * Возвращает данные сообщения info
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function info(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('info', $message, $options);
    }


    /**
     * Возвращает данные сообщения warning
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function warning(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('warning', $message, $options);
    }


    /**
     * Возвращает данные сообщения danger
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function danger(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('danger', $message, $options);
    }


    /**
     * Возвращает данные сообщения light
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function light(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('light', $message, $options);
    }


    /**
     * Возвращает данные сообщения
     * @param string      $message
     * @param string|null $title
     * @param array|null  $options
     * @return array
     */
    public static function dark(string $message, string $title = null, array $options = null): array {

        $options = is_array($options) ? $options : [];
        $options['title'] = $title;

        return self::create('dark', $message, $options);
    }
}