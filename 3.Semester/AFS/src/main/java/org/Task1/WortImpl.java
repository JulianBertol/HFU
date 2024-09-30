package org.Task1;

public class WortImpl implements Wort{

    public String content;
    public WortImpl(String s){
        this.content = s;
    }

    @Override
    public char position(int k) {
        k -= 1;
        if(k < 0 || k > this.content.length()){
         throw new IndexOutOfBoundsException("Index out of Bounds");
        }

        return this.content.charAt(k);
    }

    @Override
    public int laenge() {
        return this.content.length();
    }

    @Override
    public Wort concat(Wort w) {
        WortImpl cast = (WortImpl) w;
        String newcontent = this.content.concat(cast.content);
        return new WortImpl(newcontent);
    }

    @Override
    public int anzahl(char c) {
        int count = 0;
        for (int i = 0; i < content.length(); i++) {
            if(content.charAt(i) == c){
                count ++;
            }
        }
        return count;
    }

    @Override
    public Wort tausche(char c1, char c2) {
        String newcontents = this.content.replace(c1, c2);
        return new WortImpl(newcontents);
    }

    @Override
    public int istTeilwortVon(Wort w) {
        WortImpl cast = (WortImpl) w;
        int index = this.content.indexOf(cast.content);

        if(index == -1) {
            return 0;
        }
        return index + 1;
    }

    @Override
    public Wort teilwort(int start, int laenge) {
        int start_index = start - 1;
        String newcontent = this.content.substring(start_index, start_index + laenge);
        return new WortImpl(newcontent);
    }


    @Override
    public Wort ersetze(Wort w1, Wort w2) {
        WortImpl cast1 = (WortImpl) w1;
        WortImpl cast2 = (WortImpl) w2;
        String newcontent = this.content.replace(cast1.content, cast2.content);
        return new WortImpl(newcontent);
    }

    public boolean equals(Object obj){
        if(this == obj){
            return true;
        }
        if(!(obj instanceof WortImpl wort)){
            return false;
        }
        return this.content.equals(wort.content);
    }
}
