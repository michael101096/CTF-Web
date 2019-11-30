(window.webpackJsonp = window.webpackJsonp || []).push([[1], [, function(n, e, t) {
    "use strict";
    t.r(e),
    t.d(e, "return_char", (function() {
        return o
    }
    )),
    t.d(e, "verify", (function() {
        return a
    }
    ));
    var r = t(2);
    function o() {
        const n = r.e();
        return String.fromCodePoint(n)
    }
    let u = 0
      , c = new TextEncoder("utf-8");
    const f = "function" == typeof c.encodeInto ? function(n, e) {
        return c.encodeInto(n, e)
    }
    : function(n, e) {
        const t = c.encode(n);
        return e.set(t),
        {
            read: n.length,
            written: t.length
        }
    }
    ;
    let i = null;
    function l() {
        return null !== i && i.buffer === r.d.buffer || (i = new Uint8Array(r.d.buffer)),
        i
    }
    let d = null;
    let s = new TextDecoder("utf-8",{
        ignoreBOM: !0,
        fatal: !0
    });
    function a(n) {
        r.f(8, function(n) {
            let e = n.length
              , t = r.b(e);
            const o = l();
            let c = 0;
            for (; c < e; c++) {
                const e = n.charCodeAt(c);
                if (e > 127)
                    break;
                o[t + c] = e
            }
            if (c !== e) {
                0 !== c && (n = n.slice(c)),
                t = r.c(t, e, e = c + 3 * n.length);
                const o = l().subarray(t + c, t + e);
                c += f(n, o).written
            }
            return u = c,
            t
        }(n), u);
        const e = (null !== d && d.buffer === r.d.buffer || (d = new Int32Array(r.d.buffer)),
        d)
          , t = (o = e[2],
        c = e[3],
        s.decode(l().subarray(o, o + c))).slice();
        var o, c;
        return r.a(e[2], 1 * e[3]),
        t
    }
    s.decode()
}
, function(n, e, t) {
    "use strict";
    var r = t.w[n.i];
    n.exports = r,
    r.g()
}
]]);
