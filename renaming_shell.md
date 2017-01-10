```rename 's/.zip$/ .xml/' *.zip```

```for f in *; do zip -9r "$f.zip" "$f"; done```
