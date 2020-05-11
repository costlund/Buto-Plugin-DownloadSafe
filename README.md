# Buto-Plugin-DownloadSafe
Download file safe.

## Settings
In theme settings file.
```
plugin_modules:
  download:
    plugin: download/safe
```

## Usage
Set file param i session.
```
wfUser::setSession('plugin/download/safe/file', '/Users/james/test.jpg');
```
Then push user to url 
```
/download/safe
```
