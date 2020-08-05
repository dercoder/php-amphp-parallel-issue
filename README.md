### Issue:

PHP shows warnings when the pool size is not big enough to run the parallel tasks.

### How to run the test:

```
php test.php
```

### Without parallel extension

#### PHP Version
```
PHP 7.2.31 (cli) (built: Jul  1 2020 19:08:58) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with blackfire v1.36.0~linux-x64-non_zts72, https://blackfire.io, by Blackfire

Extension 'parallel' not present.
```

```
14:20:51 => Mike
14:20:51 => John
14:20:52 => Alex
14:20:52 => Nina
14:20:54 => Felix
14:20:55 => Harry
14:20:55 => Steven
14:20:56 => Marie

```

### With parallel extension

#### PHP Version
```
PHP 7.3.19 (cli) (built: Jun 13 2020 12:55:28) ( ZTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.19, Copyright (c) 1998-2018 Zend Technologies

parallel support => enabled
parallel version => 1.1.3
```

#### Output
```
PHP Warning:  Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250

Warning: Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250
PHP Warning:  Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250

Warning: Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250
PHP Warning:  Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250

Warning: Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250
PHP Warning:  Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250

Warning: Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250
PHP Warning:  Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250

Warning: Worker in pool exited unexpectedly with code -1 in /home/ec2-user/php-amphp-parallel-issue/vendor/amphp/parallel/lib/Worker/DefaultPool.php on line 250
14:20:23 => Felix
14:20:24 => Mike
14:20:24 => Alex
14:20:24 => Marie
14:20:24 => Steven
14:20:25 => John
14:20:25 => Harry
14:20:25 => Nina

```
